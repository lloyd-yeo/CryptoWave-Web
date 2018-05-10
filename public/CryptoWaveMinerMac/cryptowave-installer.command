#!/usr/bin/env bash
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)";
brew tap caskroom/cask;
brew cask install powershell;
brew install hwloc libmicrohttpd gcc openssl cmake;
cd "$(dirname ${BASH_SOURCE[0]})";