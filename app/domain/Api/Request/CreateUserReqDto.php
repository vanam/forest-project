<?php declare(strict_types = 1);

namespace App\Domain\Api\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Apitte\Core\Mapping\Request\BasicEntity;
use DateTime;

final class CreateUserReqDto extends BasicEntity
{

	/**
	 * @var string
	 * @Assert\NotBlank
	 * @Assert\Email
	 */
	public string $email;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	public string $name;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	public string $surname;

	/**
	 * @var string
	 * @Assert\NotBlank
	 */
	public string $username;

	/** @var string|null */
	// public ?string $password;
	public $password;

	/**
	 * @var DateTime
	 * @Assert\NotNull
	 * @Assert\DateTime
	 */
	public DateTime $birthDate;

	// protected function normalize(string $property, $value): mixed
	// {
	// 	if ($property == "birthDate") {
	// 		return new DateTime($value);
	// 	}

	// 	return parent::normalize($property, $value);
	// }

}
