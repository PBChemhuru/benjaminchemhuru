<x-layout>
    <center>
    <div style="margin-left:300px;margin-top:100px; ">
<form action="/contact" method="POST" style="border:solid;width:800px;height:800px;border-radius:5px;background-color: #253f64">
    
    @csrf
    <div style="margin: 15px;font-size:30px;" >
    <label for='name'>Your Name</label><br>
    <input type="text" placeholder="Name" name="name" value="{{old('name')}}" style="width: 500px;height:50px;font-size:20px"><br>
    @error('name')
            <p style="color: red; margin:1px ">{{$message}}</p>
    @enderror
    </div>
    <div style="margin: 15px;font-size:30px">
    <label for='email'>Your Email Adress</label><br>
    <input type="text" placeholder="Email Adress" name="email" value="{{old('email')}}" style="width: 500px;height:50px;font-size:20px"><br>
    @error('email')
            <p style="color: red; margin:1px ">{{$message}}</p>
    @enderror
    </div>
    <div style="margin: 15px;font-size:30px">
        <label for='subject'>Subject</label><br>
        <input type="text" placeholder="Subject" name="subject" value="{{old('subject')}}" style="width: 500px;height:50px;font-size:20px"><br>
        @error('subject')
                <p style="color: red; margin:1px ">{{$message}}</p>
        @enderror
        </div>
    <div style="margin: 15px;font-size:30px">
    <label for='body'>Your Message</label><br>
    <textarea  placeholder=".." name="body" value="{{old('message')}}" style="width: 500px;height:150px;font-size:20px"></textarea><br>
    @error('body')
                <p style="color: red; margin:1px ">{{$message}}</p>
    @enderror
    </div>
    
    
    <button  style="width: 500px;height:50px;font-size:20px" type="submit">Send</button>
    @if(Session::get('Success'))    
    <div>
        <p style="color: white;font-size:25px">
            {{session('Success')}}
        </p>
    </div>
    @endif
</form>
    </div>
    </center>
</x-layout>