<?php

namespace App\Controller\Admin;

use App\Entity\UserRegistration;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserRegistrationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UserRegistration::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            EmailField::new('email'),
            ArrayField::new('roles'),
            TextField::new('name'),
            TextField::new('birthday'),
            TextField::new('gender'),
            TextField::new('phonenumber'),
            TextField::new('adresse'),
        ];
    }
    
}
