<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #modal {
            animation: fadeIn 1s;
        }

        #modal-content {
            animation: slideIn 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100px);
            }

            to {
                transform: translateY(0px);
            }
        }

        @keyframes slideOut {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(-100px);
            }
        }
    </style>
</head>

<body>
    <div class="flex justify-around flex-col items-center h-screen">
        <button id='button' class="px-2 py-1 bg-red-500 text-white rounded-lg" onclick="openModal()">Open</button>
        <div id="modal"
            class="fixed top-0 left-0 w-full h-full hidden flex items-center justify-center rounded text-white">
            <div id="modal-content" class="p-4 rounded bg-gray-900">
                This is the modal content
                <button onclick="closeModal()" class="px-2 py-1 bg-green-500 text-white rounded-lg">close</button>
            </div>
        </div>
    </div>

    <script>
        const button = document.getElementById('button')
        const modal = document.getElementById('modal')
        const modalContent = document.getElementById('modal-content')

        function openModal() {
            modal.style.display = 'flex'

        }

        function closeModal() {
            modal.style.animation = 'fadeOut 1s'
            modalContent.style.animation = 'slideOut 1s'

            setTimeout(() => {
                modal.style.animation = ''
                modalContent.style.animation = ''
                modal.style.display = 'none'
            }, 1000);

        }
    </script>
</body>

</html>
