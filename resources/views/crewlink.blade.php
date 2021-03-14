@extends('layouts.app')

@section('content')
<h1>Install CrewLink</h1>
<p class="mb-2">With Among Us closed, complete the following steps.</p>
<ol class="list-decimal ml-4">
    <li>Navigate to <a href="https://github.com/ottomated/CrewLink/releases">https://github.com/ottomated/CrewLink/releases</a> and download the latest CrewLink-Setup-X.X.X.exe.</li>
    <li>Run the executable once downloaded.<br><img src="/images/crewlink-installing.jpg" alt="CrewLink Installing">
        <ul class="list-disc ml-4">
            <li>If prompted by Windows Protection, click "More info."<br><img src="/images/windows-protect.jpg" alt="Windows Protect"></li>
            <li>Then click "Run anyway."<br><img src="/images/windows-protect-run-anyway.jpg" alt="Windows Protect Run Anyway"></li>
        </ul>
    </li>
    <li>The app should launch. Then go to settings by clicking the cog in the upper left.<br><img src="/images/crewlink.jpg" alt="CrewLink App"></li>
    <li>Configure your microphone, speaker, and preference for voice activity.<br><img src="/images/crewlink-settings.jpg" alt="CrewLink Settings"></li>
    <li>When done, click the arrow back towards the top.<br><img src="/images/crewlink-settings-back.jpg" alt="CrewLink Settings Back"></li>
    <li>Click the "Open Game" button.<br><img src="/images/crewlink-open-game.jpg" alt="CrewLink Open Game"></li>
    <li>Among Us should open from Steam and CrewLink will display Menu.<br><img src="/images/crewlink-game-open.jpg" alt="Among Us with CrewLink"></li>
    <li>Connect to or create a lobby. The CrewLink app should update to display the room code and your Among Us character.<br><img src="/images/crewlink-in-lobby.jpg" alt="CrewLink in Lobby"></li>
    <li>If you talk into your microphone, the ring around your character in the CrewLink app should be green and you are good to play Among Us with Proximity Chat.<br><img src="/images/crewlink-in-lobby-chat.jpg" alt="CrewLink in Lobby with Proximity Chat"></li>
</ol>

@endsection