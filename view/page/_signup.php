<?php require "shared\_head.php"; ?>
<form id="sForm" data-csrf="SUsd213dsa1"
      class="flex flex-col w-1/4 gap-6 p-8 mx-auto my-20 text-blue-100 bg-gray-700 shadow-xl rounded-xl shadow-blue-950">
	<h1 class="my-8 text-3xl font-bold text-center">Sign Up!</h1>

	<div class="relative w-full h-10 min-w-52">
		<input type="text" id="user" name="username" class="peer absolute top-0 left-0 w-full h-full bg-transparent font-sans font-normal outline
            outline-0 focus:outline-0 disabled:border-0 disabled:cursor-not-allowed transition-all
            placeholder-shown:border border focus:border-2 placeholder:opacity-0
            focus:placeholder:opacity-100 text-sm px-3 py-2.5 rounded-lg focus:border-blue-500
            hover:border-cyan-500 hover:text-cyan-500 duration-500" placeholder="  "/>
		<label for="user" class="flex w-fit !h-3 peer-[:not(:placeholder-shown)]:bg-gray-700
            peer-placeholder-shown:bg-transparent peer-focus:bg-gray-700
            !peer-focus:bg-gray-700 select-none pointer-events-none !-top-2.5 leading-normal
            peer-placeholder-shown:leading-[4.25] absolute left-2 font-normal !overflow-visible
            truncate peer-focus:leading-tight peer-disabled:text-transparent transition-all
            peer-placeholder-shown:text-sm text-xs peer-focus:text-xs before:mr-2
            before:pointer-events-none before:transition-all peer-disabled:before:border-transparent
            after:flex-grow after:ml-2 after:pointer-events-none after:transition-all
            peer-focus:text-blue-500 peer-focus:before:!border-blue-500
            peer-focus:after:!border-blue-500 peer-hover:text-cyan-500 duration-500">
			Username
		</label>
	</div>
	<div class="relative w-full h-10 min-w-52">
		<input type="text" id="email" name="email" class="peer absolute top-0 left-0 w-full h-full bg-transparent font-sans font-normal outline
            outline-0 focus:outline-0 disabled:border-0 disabled:cursor-not-allowed transition-all
            placeholder-shown:border border focus:border-2 placeholder:opacity-0
            focus:placeholder:opacity-100 text-sm px-3 py-2.5 rounded-lg focus:border-blue-500
            hover:border-cyan-500 hover:text-cyan-500 duration-500" placeholder="  "/>
		<label for="email" class="flex w-fit !h-3 peer-[:not(:placeholder-shown)]:bg-gray-700
            peer-placeholder-shown:bg-transparent peer-focus:bg-gray-700
            !peer-focus:bg-gray-700 select-none pointer-events-none !-top-2.5 leading-normal
            peer-placeholder-shown:leading-[4.25] absolute left-2 font-normal !overflow-visible
            truncate peer-focus:leading-tight peer-disabled:text-transparent transition-all
            peer-placeholder-shown:text-sm text-xs peer-focus:text-xs before:mr-2
            before:pointer-events-none before:transition-all peer-disabled:before:border-transparent
            after:flex-grow after:ml-2 after:pointer-events-none after:transition-all
            peer-focus:text-blue-500 peer-focus:before:!border-blue-500
            peer-focus:after:!border-blue-500 peer-hover:text-cyan-500 duration-500">
			Email
		</label>
	</div>
	<div class="relative w-full h-10 min-w-52">
		<input type="password" id="pass" name="password" class="peer absolute top-0 left-0
		 	w-full h-full bg-transparent font-sans font-normal outline outline-0
		 	focus:outline-0 disabled:border-0 disabled:cursor-not-allowed transition-all
            placeholder-shown:border border focus:border-2 placeholder:opacity-0
            focus:placeholder:opacity-100 text-sm px-3 py-2.5 rounded-lg focus:border-blue-500
            hover:border-cyan-500 hover:text-cyan-500 duration-500" placeholder="  "/>
		<label for="pass" class="flex w-fit !h-3 peer-[:not(:placeholder-shown)]:bg-gray-700
            peer-placeholder-shown:bg-transparent peer-focus:bg-gray-700
            !peer-focus:bg-gray-700 select-none pointer-events-none !-top-2.5 leading-normal
            peer-placeholder-shown:leading-[4.25] absolute left-2 font-normal !overflow-visible
            truncate peer-focus:leading-tight peer-disabled:text-transparent transition-all
            peer-placeholder-shown:text-sm text-xs peer-focus:text-xs before:mr-2
            before:pointer-events-none before:transition-all peer-disabled:before:border-transparent
            after:flex-grow after:ml-2 after:pointer-events-none after:transition-all
            peer-focus:text-blue-500 peer-focus:before:!border-blue-500
            peer-focus:after:!border-blue-500 peer-hover:text-cyan-500 duration-500">
			Password
		</label>
	</div>
	<div class="relative w-full h-10 min-w-52">
		<input type="password" id="coPass" name="coPassword" class="peer absolute top-0 left-0
			w-full h-full bg-transparent font-sans font-normal outline outline-0
			focus:outline-0 disabled:border-0 disabled:cursor-not-allowed transition-all
            placeholder-shown:border border focus:border-2 placeholder:opacity-0
            focus:placeholder:opacity-100 text-sm px-3 py-2.5 rounded-lg focus:border-blue-500
            hover:border-cyan-500 hover:text-cyan-500 duration-500" placeholder="  "/>
		<label for="coPass" class="flex w-fit !h-3 peer-[:not(:placeholder-shown)]:bg-gray-700
            peer-placeholder-shown:bg-transparent peer-focus:bg-gray-700
            !peer-focus:bg-gray-700 select-none pointer-events-none !-top-2.5 leading-normal
            peer-placeholder-shown:leading-[4.25] absolute left-2 font-normal !overflow-visible
            truncate peer-focus:leading-tight peer-disabled:text-transparent transition-all
            peer-placeholder-shown:text-sm text-xs peer-focus:text-xs before:mr-2
            before:pointer-events-none before:transition-all peer-disabled:before:border-transparent
            after:flex-grow after:ml-2 after:pointer-events-none after:transition-all
            peer-focus:text-blue-500 peer-focus:before:!border-blue-500
            peer-focus:after:!border-blue-500 peer-hover:text-cyan-500 duration-500">
			Confirm Password
		</label>
	</div>
	<input class="align-middle relative overflow-hidden select-none font-sans font-bold text-center uppercase transition-all
        disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6
        rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md
        shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85]" type="submit" value="send">
	<span class="text-sm font-medium text-center">have an account
		<a href="/login" class="text-blue-500 text-md font-bold">Log In</a>
	</span>
</form>

<?php require_once "shared/_EOF.php"; ?>
