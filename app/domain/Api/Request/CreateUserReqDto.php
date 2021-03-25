<?php declare(strict_types = 1);

namespace App\Domain\Api\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Apitte\Core\Mapping\Request\BasicEntity;
use Datetime;

final class CreateUserReqDto extends BasicEntity
{

	/**
	 * @var string
	 * @Assert\NotBlank
	 * @Assert\Email
	 */
	public $email;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	public $name;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	public $surname;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	public $username;

	/** @var string|null */
	public $password;

	/**
	 * @var DateTime
	 * @Assert\NotNull
	 * @Assert\DateTime
	 */
	public $birthDate;

	protected function normalize(string $property, $value): mixed
	{
		if ($property == "birthDate") {
			return new DateTime($value);
		}

		return parent::normalize($property, $value);
	}

}
