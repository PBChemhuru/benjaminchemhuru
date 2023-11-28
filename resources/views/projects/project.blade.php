<x-layout>
<div style="float: right; color:white; text-align:left;width:60%">
<h1>{{$project->project_name}}</h1>
<h1>{{$project->project_description}}</h1>
<h1>{{$project->project_tags}}</h1>
<img src='/{{$project->project_thumbnail}}'>
<h1><a href="{{$project->project_gitlink}}" style="text-decoration: none;">View Code</a></h1>
<h1><a href="{{$project->project_demo}}" style="text-decoration: none;">Watch Demo Video</a></h1>
</div>
</x-layout>