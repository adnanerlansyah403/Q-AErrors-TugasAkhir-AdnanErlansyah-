@extends("main")

@section("title", "Register")


@section("content_frontend")


<section class="section"
x-data="{
    passwordVisible: false,
    eyeOffIcon: 'eye-off-outline',
    eyeIcon: 'eye-outline',
}">
    <div class="container">

        <h1 class="text-lg text-center mb-10">
            <span class="span">J</span>oin
            <span class="span">T</span>o 
            <span class="span">U</span>s
        </h1>

        <form action="" class="w-full">
            @csrf


            <div class="flex items-center gap-10 flex-wrap">
                <div class="mb-10 w-[48%]">
                    <label for="email" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">E</span>mail</label>
                    <div class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200">
                        <input type="email" name="email" id="email" class="" value="{{ old('email') }}" class="" placeholder="Your email..." >
                    </div>
                </div>
    
                <div class="mb-10 w-[48%]">
                    <label for="password" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">P</span>assword</label>
                    <div class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200 flex items-center w-full relative">
                        <input x-bind:type="passwordVisible ? 'text' : 'password'" name="password" id="password" class="" value="{{ old('password') }}" class="" placeholder="Your password..." style="width: 90%">
                        <a class="cursor-pointer text-md flex-1 absolute right-4 top-[55%] -translate-y-1/2" x-on:click="passwordVisible = !passwordVisible">
                            <ion-icon x-bind:name="passwordVisible ? eyeOffIcon : eyeIcon"></ion-icon>
                        </a>
                    </div>
                </div>
                
                <div class="mb-10 w-[48%]">
                    <label for="name" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">Full</span> Name</label>
                    <div class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200">
                        <input type="text" name="name" id="name" class="" value="{{ old('name') }}" class="" placeholder="Your name..." >
                    </div>
                </div>
                                
                <div class="mb-10 w-[48%]">
                    <label for="name" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">U</span>sername</label>
                    <div class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200">
                        <input type="text" name="name" id="name" class="" value="{{ old('name') }}" class="" placeholder="Your name..." >
                    </div>
                </div>
                          
                <div class="mb-10 w-[48%]">
                    <label for="name" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">B</span>irthdate</label>
                    <div class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200">
                        <input type="text" name="name" id="name" class="" value="{{ old('name') }}" class="" placeholder="Your name..." >
                    </div>
                </div>
                          
                <div class="mb-10 w-[48%]">
                    <label for="profesi" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">G</span>ender</label>
                    <select class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200 w-full" id="profesi">
                        <option value="{{ old('gender', "0") }}">Laki-Laki</option>
                        <option value="{{ old('gender', "1") }}">Perempuan</option>
                    </select>
                </div>
                
                <div class="mb-10 w-[48%]">
                    <label for="photo" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">Photo</span> Profile</label>
                    <div class="relative shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200">
                        <input type="file" name="photo" id="photo" value="{{ old('photo') }}" x-model="photo" class="pointer-events-none" style="color: white;" placeholder="Your photo..." >
                        <span x-on:click="photo.click()" class="absolute cursor-pointer text-center flex items-center justify-center right-0 top-0 bottom-0 bg-red-primary text-white w-32 rounded-lg hover:text-slate-800">
                            Upload
                        </span>
                    </div>
                </div>
                          
                <div class="mb-10 w-[48%]">
                    <label for="profesi" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">P</span>rofesi</label>
                    <select class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200 w-full" id="profesi">
                        <option value="{{ old('profesi', "") }}">Profesi</option>
                        <option value="{{ old('profesi', "1") }}">Programmer</option>
                        <option value="{{ old('profesi', "freelancer") }}">Freelancer</option>
                    </select>
                </div>      
                          
                <div class="mb-10 w-full">
                    <label for="address" class="block text-md font-medium leading-5 text-slate-700 justify-self-start mb-4"><span class="span">A</span>lamat</label>
                    <div class="shadow-[rgba(60,_64,_67,_0.3)_0px_1px_2px_0px,_rgba(60,_64,_67,_0.15)_0px_2px_6px_2px] p-4 rounded-lg active:border border-red-primary transition duration-200">
                        <textarea name="address" id="address" rows="10"></textarea>
                    </div>
                </div>
            </div>


            <div class="flex justify-center items-center">
                <button type="submit" class="flex items-center gap-4 bg-red-primary p-4 rounded-lg text-white transition duration-200">
                    Register
                </button>
            </div>

            <p class="text-[26px] mt-10 text-center">
                Already have an account?, 
                <a href="{{ route("login") }}"><span class="span">Login Now!</span></a>
            </p>
        </form>

    </div>
</section>

<script>
    
</script>

@endsection