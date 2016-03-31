<?php 
$title = "Very short projects";
require 'template.php';
pheader();
pmain();
?>
<h2>"modradio27.py</h2>
<p>A personal Python program that just grabs a random modular music file from modarchive.org</p>
<p><a href = "files/modradio27.py">Download Python file</a></p>
<p>Below are the contents of the file:</p>
<code>
#modradio27
#Made by Christian Baum.
#Requires Python 2.7 (or other compatible Python) with requests module, and requires openmpt123 installed or in directory.
#Tested on Python 2.7 but should work with 2.6+ and maybe 3.0?

import requests
import subprocess

def save_module(): #Gets a module and saves it to audio_out
    page_file = requests.get("http://lite.modarchive.org/index.php?request=view_by_random")
    page = page_file.text
    i = page.index("eid=") #We want to know the XXXXXXX and "eid=" is the closest unique string
    mod = requests.get("http://api.modarchive.org/downloads.php?moduleid="+(page[i+4:page.index("#", i)]), stream=True)
    with open("audio_out", "wb") as file:
        for chunk in mod.iter_content():
            file.write( chunk )

while(1):
    save_module()
    player = subprocess.call("c:/apps/openmpt123 audio_out",shell=False)

</code>
<?php
pfooter(); ?>