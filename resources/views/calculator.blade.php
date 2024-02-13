<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculatrice</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div id="app">
        <form action="#" method="post">
            @csrf
            <div class="grid grid-cols-1 py-2">
                <textarea name="res" readonly class="sr-only" id="result" cols="30" rows="2">
@isset($result)
{{ $result }}
@endisset
                </textarea>
            </div>
            <div class="grid grid-cols-4 gap-4 gap-x-8 gap-y-4">
                @foreach([7,8,9,'/',4,5,6,'*',1,2,3,'-',0,'.','%','+'] as $opera)

                    <button
                        type="button"
                        class="p-2 w-full rounded bg-gray-800/20 hover:bg-gray-800/50"
                        value="{{$opera}}"
                        onclick="addOperand(this)"
                    >
                        {{ $opera }}
                    </button>

                @endforeach
            </div>
            <div class="grid grid-cols-2 gap-4 gap-x-8 gap-y-4 py-2">
                <button
                    type="reset"
                    onclick="clearResult()"
                    class="p-2 w-full rounded bg-gray-800/20 hover:bg-gray-800/50"
                >
                    CE
                </button>
                <button
                    type="submit"
                    class="p-2 w-full rounded bg-gray-800/50 hover:bg-gray-800/20">
                    =
                </button>
            </div>
        </form>
</div>
</div>

<script language="JavaScript">
    function addOperand(arg) {
        console.log(arg.value);
        var result = document.getElementById('result').value;
        //document.getElementsById('result').innerText = result + arg.value;
        document.getElementById('result').innerHTML = result + arg.value;
    }

    function clearResult() {
        alert('ici')
        document.getElementById('result').innerHTML = '';
    }
</script>
</body>
</html>
