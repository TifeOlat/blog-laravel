@extends('layouts.app')

@section('content')
<div class= "col-md-9 col-lg-9 col-sm-9 pull-left" > 


    <!-- The justified navigation menu is meant for single line per list item.
        Multiple lines will require custom code not provided by Bootstrap. -->


    <!-- Example row of columns -->
    <div class="row" style="background:white; margin:10px;">
    <h1>Update Project</h1>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="{{ route('projects.update',[$project->id]) }}" method="post">
                {{ csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="project-name">Name <span class="required">*</span></label>
                    <input 
                    placeholder="Enter name"
                    id="project-name"
                    required
                    name="name"
                    spellcheck="false"
                    class="form-control"
                    value="{{ $project->name }}"
                    />
                </div>
                <div class="form-group">
                    <label for="project-content">Description</label>
                    <textarea
                    placeholder="Enter description"
                    sytle="resize: vertical"
                    id="project-content"
                    row="5"
                    name="description"
                    spellcheck="false"
                    class="form-control autosize-target text-left"
                    type="text">
                    {{ $project->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            
            </form>
        
        </div>
        
    </div>
</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right blog-sidebar">
<div class="sidebar-module">
        <h4>Action</h4>
        <ol class="list-unstyled">
          <li><a href="/projects/{{ $project->id}}">View projects</a></li>
          <li><a href="/projects">All projects</a></li>
        </ol>
      </div>
      <!-- <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div> -->
      <!-- <div class="sidebar-module">
        <h4>Members</h4>
        <ol class="list-unstyled">
          <li><a href="#">March 2014</a></li>
          
        </ol>
      </div>
    </div> -->
    @endsection