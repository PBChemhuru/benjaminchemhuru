<x-layout>
    <div style="margin: 5%;float:right;position:absolute">
     <div style="float:right;position:relative;">       
        <form action="/projects/search/" >
            @csrf
        <input class='search'type="text" name='search' placeholder="Search by tags or project name or description" style="width:400px;height:50px;font-size:30px">
        <button type="submit" style="width:100px;height:55px;font-size:30px"><i class="fa fa-search"></i></button>
        </form>
     </div>
     <div style="float:right;position:relative;top:50px">
        @if (!empty($projects))
        @foreach($projects as $project)
        <div class="card" style="background-image:url('/{{$project->project_thumbnail}}');">
        <h1><a href="/projects/{{$project->id}}" style="text-decoration: none;color:aqua;filter:brightness(80%)">{{$project->project_name}}</a></h1>
            <div class='tag-container'>
            <div class='card-tags'>
                <p style="margin: 5px">{{$project->project_tags}}</p>
            </div>
            </div>
        </div>   
        @endforeach 
        @else
        <h1 style="color: WHITE"> No Projects matching search criteria</h1>
        @endif
     </div>  
    
    </div>
</x-layout>