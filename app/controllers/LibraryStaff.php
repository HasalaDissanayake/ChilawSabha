<?php

class LibraryStaff extends Controller
{
    public function __construct()
    {
        $this->authenticateRole('LibraryStaff');
    }

    public function index()
    {
        $this->view('LibraryStaff/index');
    }
    public function analytics()
    {
        $this->view('LibraryStaff/Analytics');
    }
    public function bookcatalog()
    {
        $this->view('LibraryStaff/Bookcatalog');
    }
    public function bookrequest()
    {
        $this->view('LibraryStaff/Bookrequest');
    }
}
