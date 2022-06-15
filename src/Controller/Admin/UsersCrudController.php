<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;


class UsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Users::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Name'),
            TextField::new('dateNaissance'),
            TextField::new('gender'),
            EmailField::new('email'),
            TextField::new('phoneNumber'),
            TextField::new('adresse'),
        ];
    }
    
}
