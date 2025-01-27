<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFFAF6] h-screen flex flex-col justify-center items-center">
    <img src="/Assets/logo.png" class="mb-10" alt="">
    <div class="p-10 bg-white w-96 lg:w-[500px] space-y-4 shadow-lg rounded-lg">
        <div class="flex flex-col space-y-2">
            <label>Email</label>
            <input class="p-2 border rounded-lg shadow-sm" type="email" placeholder="Email">
        </div>
        <div class="flex flex-col space-y-2">
            <label>Password</label>
            <input class="p-2 border rounded-lg shadow-sm" type="password" placeholder="Password">
        </div>
        {{--CHECK BOX--}}
        <div class="flex items-center justify-end gap-4">
            <h1 class="text-slate-400 underline">Forgot your password?</h1>
            <a href="#" class="px-4 py-1 bg-black text-white rounded-lg">LOG IN</a>
        </div>
    </div>
</body>
</html>