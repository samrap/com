<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateProjectGallery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:gallery {slug}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the gallery images in the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line("Retrieving project...");

        $slug = $this->argument('slug');

        $project = Project::where('slug', $slug)->firstOrFail();

        $this->info("Project '".$project->name."' found");
        $this->line("Checking for project images...");

        if (! file_exists(public_path("img/${slug}"))) {
            $this->error("No project images found. Check the public folder.");
            exit(1);
        }

        $this->info("Found images for project");

        $fileInfo = File::files(public_path("img/${slug}"));
        $databaseImages = [];

        foreach ($fileInfo as $file) {
            $filename = $file->getFilename();
            array_push($databaseImages, [
                'thumbnail' => "/img/${slug}/${filename}",
                'src' => "/img/${slug}/${filename}",
            ]);
        }

        dump($databaseImages);

        if ($this->confirm("Do you want to save these images to the project database?")) {
            $project->images = $databaseImages;
            $project->save();
        }
    }
}
