<?php

namespace DesguizeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DesguizeBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
