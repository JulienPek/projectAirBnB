<?php

namespace App\Controller\Admin;

use App\Entity\BienLoc;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
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
            TextField::new('title'),
            TextField::new('adress'),
            TextField::new('capacity'),
            TextEditorField::new('description'),
            ImageField::new('image')->setBasePath('assets/images/BienLoc Scambnb')
            ->setUploadDir('public/assets/images/BienLoc Scambnb'),
            MoneyField::new('price')->setCurrency('EUR'),
            //TextField::new('comments'),
        ];
    }


}
