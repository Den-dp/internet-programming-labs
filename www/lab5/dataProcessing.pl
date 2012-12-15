#!/usr/local/miniperl/miniperl

#use strict;
#use warnings;
#use 5.010;
#use utf8;

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
print "<html><br><br><br><br><h2>!!!</h2>";
print "Thank you, here is the information you entered:<br>";
print "Name: $name";
