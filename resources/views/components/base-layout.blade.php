<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPV Samenwerking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div>

    <body class="bg-gray-100 text-gray-800">
        <header class="bg-blue-600 text-white py-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">BPV Samenwerking</h1>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="hover:underline">Home</a></li>
                        <li><a href="#" class="hover:underline">Over Ons</a></li>
                        <li><a href="#" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>

            </div>
            {{$slot}}
        </header>

        <main class="container mx-auto mt-8">
            
            <section class="text-center">
                <h2 class="text-4xl font-bold mb-4">Welkom bij de BPV Samenwerking</h2>
                <p class="text-lg mb-6">
                    Een platform waar MBO-studenten, docenten en bedrijven samenwerken om kennis en ervaring te delen.
                </p>
                <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    Lees Meer
                </a>
            </section>

            <section class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Voor Studenten</h3>
                    <p>Ontwikkel je vaardigheden en werk samen met professionals.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Voor Docenten</h3>
                    <p>Begeleid studenten en deel je expertise met bedrijven.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Voor Bedrijven</h3>
                    <p>Werk samen met jong talent en draag bij aan hun ontwikkeling.</p>
                </div>
            </section>
        </main>

        <footer class="bg-gray-800 text-white py-4 mt-12">
            <div class="container mx-auto text-center">
                <p>&copy; 2025 BPV Samenwerking. Alle rechten voorbehouden.</p>
            </div>
        </footer>
    </body>

</div>

</html>