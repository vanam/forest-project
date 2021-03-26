<?php declare(strict_types = 1);

namespace App\Domain\Api\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Apitte\Core\Mapping\Request\BasicEntity;
use DateTime;

final class CreateUsersReqDto extends BasicEntity
{

	/**
	 * @var CreateUserReqDto[]
	 */
	public array $users;

}
