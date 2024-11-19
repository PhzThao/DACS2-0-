<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 h-screen">

<!-- Top-right User Info -->
<div class="fixed top-4 right-4 flex items-center gap-2 p-2 bg-white rounded-lg shadow-lg border mb-4">
    <p class="font-medium mr-4">Admin</p> <!-- Add mr-2 to move the name slightly left -->
    <div class="bg-gray-200 h-10 w-10 rounded-full flex items-center justify-center text-lg font-bold">A</div>
</div>

<div class="flex h-screen pt-16 mt-8"> <!-- Add padding-top to prevent overlap with top-right section -->

    <!-- Left Sidebar -->
    <div class="w-80 border-r bg-white p-4">
        <h2 class="mb-4 text-xl font-semibold">Chat</h2>
        <div class="relative mb-6">
            <input type="text" placeholder="Search..." class="pl-8 w-full py-2 border rounded text-gray-700">
        </div>
        <div class="space-y-4">
            <?php
            $users = ['Marvin McKinney', 'Jacob Jones', 'Leslie Alexander', 'Eleanor Pena', 'Kathryn Murphy', 'Wade Warren'];
            foreach ($users as $index => $name) {
                $isActive = $index === 2 ? 'bg-blue-600 text-white' : 'hover:bg-blue-50';
                echo "
                <div class='flex items-center gap-3 rounded-lg p-2 $isActive'>
                    <div class='bg-gray-200 h-10 w-10 rounded-full flex items-center justify-center text-lg font-bold'>"
                        . substr($name, 0, 1) . 
                    "</div>
                    <div class='flex-1'>
                        <p class='font-medium'>$name</p>
                        <p class='text-sm text-gray-500'>Lorem ipsum dolor sit amet</p>
                    </div>
                    <span class='text-xs'>3m</span>
                </div>";
            }
            ?>
        </div>
    </div>

    <!-- Main Chat Area -->
    <div class="flex-1 flex flex-col">
        <div class="border-b bg-white p-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-gray-200 h-10 w-10 rounded-full flex items-center justify-center text-lg font-bold">LA</div>
                <div>
                    <p class="font-medium">Leslie Alexander</p>
                    <p class="text-sm text-gray-500">Web Designer</p>
                </div>
            </div>
        </div>

        <!-- Chat Messages -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            <div class="flex gap-3">
                <div class="bg-gray-200 h-10 w-10 rounded-full flex items-center justify-center text-lg font-bold">LA</div>
                <div class="bg-blue-100 rounded-lg p-3 max-w-[80%]">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae leo tempus quam porta ultrices.</p>
                    <p class="text-xs text-gray-500 mt-1">10:15 am</p>
                </div>
            </div>
        </div>

        <div class="border-t bg-white p-4">
            <div class="flex gap-2">
                <input type="text" placeholder="Write a message..." class="flex-1 p-2 border rounded text-gray-700">
                <button class="p-2 rounded-full bg-blue-600 text-white">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4 2l16 10L4 22V2zm0 4v12l9-6-9-6z"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="w-80 border-l bg-white p-4">
        <div class="text-center">
            <div class="bg-gray-200 h-24 w-24 rounded-full mx-auto mb-4 flex items-center justify-center text-4xl font-bold">AU</div>
            <h3 class="font-semibold text-lg">Dr. Ali Uzair</h3>
            <p class="text-sm text-gray-500 mb-6">Consultant Cardiologist</p>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="text-center">
                    <p class="font-semibold">115+</p>
                    <p class="text-sm text-gray-500">Patients</p>
                </div>
                <div class="text-center">
                    <p class="font-semibold">3+</p>
                    <p class="text-sm text-gray-500">Years</p>
                </div>
                <div class="text-center">
                    <p class="font-semibold">4.9</p>
                    <p class="text-sm text-gray-500">Rating</p>
                </div>
                <div class="text-center">
                    <p class="font-semibold">90+</p>
                    <p class="text-sm text-gray-500">Reviews</p>
                </div>
            </div>

            <div class="text-left">
                <h4 class="font-semibold mb-2">About Me</h4>
                <p class="text-sm text-gray-500">
                    Dr. Ali Uzair is a highly skilled and experienced cardiologist in GHQ Hospital...
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
