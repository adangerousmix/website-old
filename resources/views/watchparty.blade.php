@extends('layouts.app')

@section('content')
<h1>Watch Party</h1>
<h2>Twitch Watch Party Widgets for StreamElements</h2>
<p>The Twitch Watch Party Widgets include a timer, poster and title. They are designed to help you run a watch party using the Twitch Watch Party feature or your own. Use any combination of the widgets for your overlay.</p>
<image src="./images/wp-example.jpg" />
<a href="https://github.com/adangerousmix/watch-party-widgets" class="adm-link-button inline-block px-4 py-2 border rounded text-white border-none my-2">Github</a>
<a href="https://github.com/adangerousmix/watch-party-widgets/archive/master.zip" class="adm-link-button inline-block px-4 py-2 border rounded text-white border-none my-2">Download</a>
<p class="my-2"><em>Note: The poster widget requires an API key for <a href="https://www.themoviedb.org/">https://www.themoviedb.org/</a>.</em></p>
<h3>Video</h3>
<div style="max-width: 560px;">
    <div class="fullscreen">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/d3Ea_RpUd9Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<h3>Twitch Chat Commands</h3>
<p>Only broadcasters have the permissions to execute the watch party commands.</p>
<table class="table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2">Command</th>
            <th class="px-4 py-2">Description</th>
            <th class="px-4 py-2">Example</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border px-4 py-2">!settitle [name] - [year]<br>!settitle [name] - [year] - S[season_number]:E[episode_number]</td>
            <td class="border px-4 py-2">
                <p>This command is used to set your Twitch title, but it will also set the title and poster for the show. The " - " (spaces included) is very important for passing along a movie's title and year or a tv show's title, year, and episode information.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!settitle Batman - 1989</pre>
                <pre>!settitle Scrubs - 2005 - S1:E1</pre>
            </td>
        </tr>
        <tr>
            <td class="border px-4 py-2">!wptitle [name] - [year]<br>!wptitle [name] - [year] - S[season_number]:E[episode_number]</td>
            <td class="border px-4 py-2">
                <p>This command will set the title and poster for the show. It will not change the Twitch title. The " - " (spaces included) is very important for passing along a movie's title and year or a tv show's title, year, and episode information.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!wptitle Batman - 1989</pre>
                <pre>!wptitle Scrubs - 2005 - S1:E1</pre>
            </td>
        </tr>
        <tr>
            <td class="border px-4 py-2">!wpreset</td>
            <td class="border px-4 py-2">
                <p>This command will reset the timer to the countdown you've specified.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!wpreset</pre>
            </td>
        </tr>
        <tr>
            <td class="border px-4 py-2">!wpstart</td>
            <td class="border px-4 py-2">
                <p>This command will set the timer to 0 and be when everyone should start the show.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!wpstart</pre>
            </td>
        </tr>
        <tr>
            <td class="border px-4 py-2">!wpadd [seconds]</td>
            <td class="border px-4 py-2">
                <p>This command will add the specified amount of seconds to the timer.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!wpadd 5</pre>
            </td>
        </tr>
        <tr>
            <td class="border px-4 py-2">!wpsub [seconds]</td>
            <td class="border px-4 py-2">
                <p>This command will subtract the specified amount of seconds from the timer.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!wpsub 5</pre>
            </td>
        </tr>
        <tr>
            <td class="border px-4 py-2">!wpset [seconds]</td>
            <td class="border px-4 py-2">
                <p>This command will set the timer to the specified amount of seconds.</p>
            </td>
            <td class="border px-4 py-2">
                <pre>!wpset -300</pre>
            </td>
        </tr>
    </tbody>
</table>
<h2 class="mt-4">Picture-in-picture Bookmarklet</h2>
<p>This bookmarklet adds a little JavaScript in the form of a bookmark to your browser that when clicked will execute against the current page you are viewing. It will search for the first video tag on the page and then open it into the browser's picture-in-picture functionality. To add, simply drag and drop the button below up to your bookmark bar. If you'd like to remove it, right click and select delete.</p>
<a href="javascript:document.getElementsByTagName('video')[0].requestPictureInPicture();" class="adm-link-button inline-block px-4 py-2 border rounded text-white border-none my-2">PiP</a>
@endsection