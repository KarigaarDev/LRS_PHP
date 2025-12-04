<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Portfolio extends Controller
{
    protected $projects = [];

    public function __construct()
    {
        // Simple mock data — replace with DB later
        $this->projects = [
            [
                'slug' => 'project-1',
                'title' => 'Cafe Brand Identity',
                'category' => 'Branding',
                'image' => 'project1.jpg',
                'short' => 'Logo, packaging and social templates for a local cafe.',
                'content' => 'Detailed case study content for project 1...'
            ],
            [
                'slug' => 'project-2',
                'title' => 'Fitness Website Design',
                'category' => 'Website Design',
                'image' => 'project2.jpg',
                'short' => 'Landing page & booking system for a personal trainer.',
                'content' => 'Detailed case study content for project 2...'
            ],
            // add more mock projects if needed
        ];
    }

    public function index()
    {
        $data['projects'] = $this->projects;
        return view('portfolio/index', $data);
    }

    public function view($slug = null)
    {
        foreach ($this->projects as $p) {
            if ($p['slug'] === $slug) {
                $data['project'] = $p;
                return view('portfolio/view', $data);
            }
        }
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Project not found");
    }
}
