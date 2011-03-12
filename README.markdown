# LJAdmin module

*Start new admin backends for an application using basic configurations*

- **Version:** 0.2.0
- **URL:** <https://github.com/Luwe/Kohana-Admin>

## Description

This Kohana module is designed to act as a scaffold for admin backends. It uses the standard Auth module to distinguish admins from guests. Extending Controller_Admin will secure your admin pages from unwanted visitors.

By default, the File driver is used for simple authentication. Adding users can be done by editing config/auth.php (see Auth module).

This module doesn't provide a full admin layout. For a nice admin theme check here: <https://github.com/synapsestudios/kohana-admin-theme>.

## Notice

Until today (10th of march, 2011) Auth doesn't support roles when checking for status using the Auth::logged_in() method. A role can be given as a parameter but apparently Auth does nothing with the added parameter. As long as only admins can be registered users, this is no problem. Watch out when using roles to identify users as admins!

## Used Kohana modules

- ### kohana/core
  - **url** : <https://github.com/kohana/core>
  - **version** : `3.1.x`
  
- ### modules/auth
	- **url** : <https://github.com/kohana/auth>
  - **version** : `3.1.x`
- ### modules/kostache
	- **url** : <https://github.com/zombor/KOstache>
  - **version** : `3.1.x`
- ### modules/ljbase
	- **url** : <https://github.com/Luwe/Kohana-Base>
  - **version** : `0.2.0`

## Disclaimer

I'm not perfect, so don't use this module blindly without knowing what it does. Also, help is always appreciated when it comes to refining the sourcecode.

~ Lieuwe Jan Eilander
