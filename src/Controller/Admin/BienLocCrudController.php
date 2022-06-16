<?php

namespace App\Controller\Admin;

use App\Entity\BienLoc;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BienLocCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BienLoc::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('adresse'),
            TextField::new('capacity'),
            TextEditorField::new('description'),
        ];
    }
}
