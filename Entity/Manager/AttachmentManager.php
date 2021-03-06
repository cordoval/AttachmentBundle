<?php

/*
 * This file is part of the CCDN AttachmentBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/> 
 * 
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNComponent\AttachmentBundle\Entity\Manager;

use CCDNComponent\CommonBundle\Entity\Manager\EntityManagerInterface;
use CCDNComponent\CommonBundle\Entity\Manager\BaseManager;

/**
 * 
 * @author Reece Fowell <reece@codeconsortium.com> 
 * @version 1.0
 */
class AttachmentManager extends BaseManager implements EntityManagerInterface
{



	/**
	 *
	 * @access public
	 * @param string $attachment
	 * @return AttachmentManager $this
	 */
	public function insert($attachment)
	{
		$this->persist($attachment);
		
		return $this;
	}
	
	
	/**
	 * @access public
	 * @param Array() $attachments 
	 * @return AttachmentManager $this
	 * @link http://www.php.net/manual/en/function.unlink.php
	 */
	public function bulkDelete($attachments)
	{
	
		foreach ($attachments as $key => $attachment)
		{
			if (@unlink($attachment->getAttachment()))
			{
				$this->remove($attachment);
			}
		}
		
		return $this;
	}
	
	
	
}