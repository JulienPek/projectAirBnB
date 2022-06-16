<?php

namespace App\Controller\Admin;

use App\Entity\UserRegistration;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserRegistrationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UserRegistration::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
