#!/bin/bash -xv

bin/cake illuminator illuminate -v
bin/cake annotate all -v
bin/cake code_completion generate
bin/cake phpstorm generate
