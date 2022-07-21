<?php

function debug($tab)
{
        echo '<pre style="height:100px; overflow-y: scroll; font-size:.5rem;padding: .6rem; font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
        print_r($tab);
        echo '</pre>';
}

function dump($tab)
{
	echo '<pre style="background-color: #000; width: 200px; height: 100px; overflow: scroll; font-size: 0.5rem; padding: 0.6rem; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
	var_dump($tab);
	echo '</pre>';
}
