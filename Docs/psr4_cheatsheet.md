# PSR-4 cheatsheet

## Include and Require files

* Include a file
`include 'file_path.extension';`
`include_once 'file_path.extension';`

* Require a file
`require 'file_path.extension';`
`require_once 'file_path.extension';`

* Include vs require:
The difference between include and require is that include throws an warning and require throws an error if there is no such file.

* 3 types of errors in PHP:
1. Notice
2. Warning
3. Error

* Include and include_once (Require and require_once):
	* Include_once makes an additional check if the file is already included. And includes it if it's not included yet.
	* For PHP files witch return a value include_once will return always the first and same value. 
	* Once commands are slower.

## 