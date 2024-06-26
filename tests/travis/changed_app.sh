#!/bin/bash
#
# SPDX-FileCopyrightText: 2015 ownCloud, Inc.
# SPDX-License-Identifier: AGPL-3.0-only
#
# @author Joas Schilling
# @author Thomas Müller
# @copyright 2015 Thomas Müller thomas.mueller@tmit.eu
#

APP=$1

FOUND=$(git diff ${TRAVIS_COMMIT_RANGE} | grep -- "^+++ b/apps/$APP/")

if [ "x$FOUND" != 'x' ]; then
	echo "1"
else
	echo "0"
fi
