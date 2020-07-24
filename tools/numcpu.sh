#!/usr/bin/env bash
UNAME=`uname`
if [ $UNAME = "Linux" ]; then grep -c ^processor /proc/cpuinfo ; elif [ $UNAME = "Darwin" ] ; then sysctl -n hw.ncpu ; else echo 1 ; fi
