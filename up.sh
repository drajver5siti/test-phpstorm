#!/bin/bash

if [ ! -e "initialized" ];
then
	source "initialize.sh"
fi

./vendor/bin/sail up -d

project_path=`pwd`
p=$(printf "%s" "$project_path" | xxd -p)
code --folder-uri "vscode-remote://dev-container+${p//[[:space:]]/}/var/www/html"
