#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

TARGET_DIR="me/report"

req="$NUM_COMMITS"

cd $TARGET_DIR || exit 1
[[ ! -d .git ]] && echo "Missing .git directory." && exit 1

num=$( git rev-list --all --count )
echo "[$ACRONYM] commits=$num"

log=$( git log --pretty=format:"%h - %an, %ar : %s" | head -5 )
echo addNewLine "$log"

(( $num > 0 ))
doLog $? "Number of commits = $num"
