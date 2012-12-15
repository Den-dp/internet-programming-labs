#!/usr/bin/perl -w

use strict;
use URI::Escape;
# use utf8;

# Лабораторна робота №5
#
# Написання CGI-скрипта на мові Perl. Обробка форм.
#
# Створити гіпертекстову сторінку з формою, куди помістити всі елементи, які
# дозволяють ввід даних. За допомогою скрипта забезпечити контроль даних перед
# відправкою їх на сервер.
#
# Для обробки даних, які переслані на сервер, створити CGI-скрипт на мові Perl.
# Розкодовані дані повернути клієнтові

print "Content-type: text/html\n\n";
print "<!DOCTYPE html><html><head>\n";
print "<title>Result</title>\n";
print "</head><body>\n";

my (@formFields, $query);

if ($ENV{REQUEST_METHOD} eq "GET") {
	$query = uri_unescape($ENV{'QUERY_STRING'});
} else {
	read STDIN, $query, $ENV{CONTENT_LENGTH};
	$query = uri_unescape($query);
}

if ($query) {
	@formFields = split(/&/,$query);
	print "Passed data:<ul>";
	foreach (@formFields) {
		if (/^(\w+)=(.*)/) {
			print "<li>",$1," = ",$2,"</li>";
		}
	}
	print "</ul>";
}

print "</body></html>";