<?php
use Buchin\Scriptholder\Scriptholder;
/**
 * replace - with desired text
 */

describe('0.1.0 - Feature: Place Script based on file name', function(){
	context('User story:', function(){
		describe('As a user', function(){});
		describe('I want to place stats/ads script anywhere in my applications', function(){});
		describe('So I don\'t need to edit applications one by one, if they are changed or creating new' , function(){});
	});

	context('Scenario:', function(){
		describe("User called Scriptholder::place('scriptname')", function(){
			context('when file exists', function(){
				it('returns content of scripts/scriptname.blade.php', function(){
					$string = Scriptholder::place('statcounter');

					expect($string)->not->toBeEmpty();
				});
			});

			context('when file not exists', function(){
				it('returns empty string', function(){
					allow('file_exists')->toBeCalled()->andReturn(false);
					$string = Scriptholder::place('notexistingfilename');

					expect($string)->toBeEmpty();
				});
			});
		});
	});
});