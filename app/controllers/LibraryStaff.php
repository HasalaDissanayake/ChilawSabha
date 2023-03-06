<?php

class LibraryStaff extends Controller
{
    public function __construct()
    {
        $this->authenticateRole('LibraryStaff');
    }

    public function index()
    {
        // TODO: USE COMPONENTS AND REDO
        $this->view('LibraryStaff/index',styles:['LibraryStaff/index' ,'Components/table','Components/form','Components/modal']);
    }

    public function analytics()
    {
        $this->view('LibraryStaff/Analytics',styles:['LibraryStaff/index','LibraryStaff/analytics','Components/form']);
    }
    
    public function bookcatalog()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Bookcatalog',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function bookrequest()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Bookrequest',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function lostbooks()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Lostbooks',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function delistedbooks()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Delistedbooks',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function damagedbooks()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Damagedbooks',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function users()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Users',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function disabledusers()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Disabledusers',styles:['LibraryStaff/index','LibraryStaff/catalogue','Components/table']);
    }

    public function addusers()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Addusers',styles:['LibraryStaff/index','Components/form']);
    }

    public function addbooks()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Addbooks',styles:['LibraryStaff/index','Components/form']);
    }

    public function editbooks()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Editbooks',styles:['LibraryStaff/index','Components/form']);
    }

    public function editusers()
    {
        // TODO: REDO USING COMPONENTS
        $this->view('LibraryStaff/Editusers',styles:['LibraryStaff/index','Components/form']);
    }
}
