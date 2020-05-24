<?php

namespace App\Forum\Interfaces;

interface FrontendRepositoryInterface{
    public function getCategories();
    public function getPostsForFrontPage();
}