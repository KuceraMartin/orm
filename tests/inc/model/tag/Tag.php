<?php

namespace Nextras\Orm\Tests;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany;
use Nextras\Orm\Relationships\OneHasMany;


/**
 * @property string $name
 * @property ManyHasMany|Book[] $books {m:n BooksRepository}
 *
 * @property OneHasMany|TagFollower[] $tagFollowers {1:m TagFollowersRepository}
 */
final class Tag extends Entity
{

	public function __construct($name = NULL)
	{
		parent::__construct();
		if ($name) {
			$this->name = $name;
		}
	}

}
