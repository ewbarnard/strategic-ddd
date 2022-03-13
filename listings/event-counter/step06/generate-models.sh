#!/bin/bash -xv
bin/cake cache clear_all

BAKE="bin/cake bake model -f --no-fixture --no-test"

TABLES_PRIMARY="domain_events \
exception_reports \
event_counts \
local_app_events"

# shellcheck disable=SC2034
for pass in 1 2; do
    for j in $TABLES_PRIMARY; do
        echo baking "$j"
        $BAKE "$j"
    done
done

bin/cake illuminator illuminate -v
bin/cake annotate all -v
bin/cake code_completion generate
bin/cake phpstorm generate

echo
echo "$0: All done."
echo
