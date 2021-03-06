<?php
declare(strict_types=1);

namespace Plaisio\Login;

/**
 * Interface for classes for validating a requirement to a login request.
 */
interface LoginRequirement
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Validates a requirement to a login request. Returns:
   * <ul>
   * <li> int: The ID of a login response.
   * <li> null: Indicating no real validation toke place (e.g. a login form is shown only and real validation will be
   * done when the login form is submitted).
   * </ul>
   *
   * @param array $data The data for validating the requirement to the login request. This method is allowed to enhance
   *                    this array with new elements.
   *
   * @return int|null
   */
  public function validate(array &$data): ?int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
