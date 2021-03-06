CCDNComponent AttachmentBundle README.
======================================

  
Notes:  
------
  
This bundle is for the symfony framework and thusly requires Symfony 2.0.x and PHP 5.3.6
  
This project uses Doctrine 2.0.x and so does not require any specific database.
  

This file is part of the CCDNComponent AttachmentBundle

(c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/> 

Available on github <http://www.github.com/codeconsortium/>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.


Dependencies:
-------------

1. [PagerFanta](https://github.com/whiteoctober/Pagerfanta).
2. [PagerFantaBundle](http://github.com/whiteoctober/WhiteOctoberPagerfantaBundle).
3. [CCDNComponent CommonBundle](https://github.com/codeconsortium/CommonBundle).
4. [CCDNComponent CrumbTrailBundle](https://github.com/codeconsortium/CrumbTrailBundle).


Installation:
-------------
    
1) Download and install the dependencies.
   
   You can set deps to include:

```sh
[pagerfanta]
    git=http://github.com/whiteoctober/Pagerfanta.git

[PagerfantaBundle]
    git=http://github.com/whiteoctober/WhiteOctoberPagerfantaBundle.git
    target=/bundles/WhiteOctober/PagerfantaBundle

[CCDNComponentCommonBundle]
    git=http://github.com/codeconsortium/CommonBundle.git
    target=/bundles/CCDNComponent/CommonBundle

[CCDNComponentCrumbTrailBundle]
    git=http://github.com/codeconsortium/CrumbTrailBundle.git
    target=/bundles/CCDNComponent/CrumbTrailBundle

[CCDNComponentAttachment]
    git=http://github.com/codeconsortium/AttachmentBundle.git
    target=/bundles/CCDNComponent/AttachmentBundle
```
add to your autoload:

```php
    'CCDNComponent'    => __DIR__.'/../vendor/bundles',
```
and then run `bin/vendors install` script.

2) In your AppKernel.php add the following bundles to the registerBundles method array:  

```php
	new CCDNComponent\CommonBundle\CCDNComponentCommonBundle(),
	new CCDNComponent\CrumbTrailBundle\CCDNComponentCrumbTrailBundle(),
	new CCDNComponent\AttachmentBundle\CCDNComponentAttachmentBundle(),
```
	
3) In your app/config/config.yml add:    

```sh
ccdn_component_attachment:
    user:
        profile_route: cc_profile_show_by_id
    template:
        engine: twig
        theme: CCDNComponentAttachmentBundle:Form:fields.html.twig
    store:
        dir: /users/reecefowell/projects/htdocs/symfony/store/
    quota_per_user:
        max_files_quantity: 20
        max_filesize_per_file: 300KiB
        max_total_quota: 1000KiB
```

4) In your app/config/routing.yml add:  

```sh
CCDNComponentAttachmentBundle:
    resource: "@CCDNComponentAttachmentBundle/Resources/config/routing.yml"
    prefix: /
```

5) Symlink assets to your public web directory by running this in the command line:

```sh
	php app/console assets:install --symlink web/
```
	
Then your done, if you need further help/support, have suggestions or want to contribute please join the community at [www.codeconsortium.com](http://www.codeconsortium.com)
