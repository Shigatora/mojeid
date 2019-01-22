<?php

namespace MojeId;

class Parameter
{
    /**
     * @var array
     */
    private $parameters;

    /**
     * Parameter constructor.
     * @param array|null $requiredParams
     */
    public function __construct(?array $requiredParams = null)
    {
        if (is_array($requiredParams)) {
            foreach ($requiredParams as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->parameters->$key = $value;
                }
            }
        }
    }

    public function getAttributes() : array
    {
        $this->attributes = [
            'fullname' => array(
                'scheme'   => 'http://axschema.org/namePerson',
                'text'     => 'Celé jméno',
                'required' => false
            ),
            'firstname' => array(
                'scheme'   => 'http://axschema.org/namePerson/first',
                'text'     => 'Jméno',
                'required' => true
            ),
            'lastname' => array(
                'scheme'   => 'http://axschema.org/namePerson/last',
                'text'     => 'Příjmení',
                'required' => true
            ),
            'nick' => array(
                'scheme'   => 'http://axschema.org/namePerson/friendly',
                'text'     => 'Přezdívka',
                'required' => false
            ),
            'company' => array(
                'scheme'   => 'http://axschema.org/company/name',
                'text'     => 'Jméno společnosti',
                'required' => false
            ),
            'h_address' => array(
                'scheme'   => 'http://axschema.org/contact/postalAddress/home',
                'text'     => 'Domácí adresa – Ulice',
                'required' => true
            ),
            'h_address2' => array(
                'scheme'   => 'http://axschema.org/contact/postalAddressAdditional/home',
                'text'     => 'Domácí adresa – Ulice2',
                'required' => false
            ),
            'h_address3' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/main/street3',
                'text'     => 'Domácí adresa – Ulice3',
                'required' => false
            ),
            'h_city' => array(
                'scheme'   => 'http://axschema.org/contact/city/home',
                'text'     => 'Domácí adresa – Město',
                'required' => true
            ),
            'h_state' => array(
                'scheme'   => 'http://axschema.org/contact/state/home',
                'text'     => 'Domácí adresa – Stát',
                'required' => true
            ),
            'h_country' => array(
                'scheme'   => 'http://axschema.org/contact/country/home',
                'text'     => 'Domácí adresa – Země',
                'required' => true
            ),
            'h_postcode' => array(
                'scheme'   => 'http://axschema.org/contact/postalCode/home',
                'text'     => 'Domácí adresa – PSČ',
                'required' => true
            ),
            'b_address' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/street',
                'text'     => 'Faktur. adresa – Ulice',
                'required' => false
            ),
            'b_address2' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/street2',
                'text'     => 'Faktur. adresa – Ulice2',
                'required' => false
            ),
            'b_address3' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/street3',
                'text'     => 'Faktur. adresa – Ulice3',
                'required' => false
            ),
            'b_city' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/city',
                'text'     => 'Faktur. adresa – Město',
                'required' => false
            ),
            'b_state' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/sp',
                'text'     => 'Faktur. adresa – Stát',
                'required' => false
            ),
            'b_country' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/cc',
                'text'     => 'Faktur. adresa – Země',
                'required' => false
            ),
            'b_postcode' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/bill/pc',
                'text'     => 'Faktur. adresa – PSČ',
                'required' => false
            ),
            's_address' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/street',
                'text'     => 'Doruč. adresa – Ulice',
                'required' => false
            ),
            's_address2' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/street2',
                'text'     => 'Doruč. adresa – Ulice2',
                'required' => false
            ),
            's_address3' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/street3',
                'text'     => 'Doruč. adresa – Ulice3',
                'required' => false
            ),
            's_city' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/city',
                'text'     => 'Doruč. adresa – Město',
                'required' => false
            ),
            's_state' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/sp',
                'text'     => 'Doruč. adresa – Stát',
                'required' => false
            ),
            's_country' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/cc',
                'text'     => 'Doruč. adresa – Země',
                'required' => false
            ),
            's_postcode' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/ship/pc',
                'text'     => 'Doruč. adresa – PSČ',
                'required' => false
            ),
            'm_address' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/street',
                'text'     => 'Koresp. adresa – Ulice',
                'required' => false
            ),
            'm_address2' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/street2',
                'text'     => 'Koresp. adresa – Ulice2',
                'required' => false
            ),
            'm_address3' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/street3',
                'text'     => 'Koresp. adresa – Ulice3',
                'required' => false
            ),
            'm_city' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/city',
                'text'     => 'Koresp. adresa – Město',
                'required' => false
            ),
            'm_state' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/sp',
                'text'     => 'Koresp. adresa – Stát',
                'required' => false
            ),
            'm_country' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/cc',
                'text'     => 'Koresp. adresa – Země',
                'required' => false
            ),
            'm_postcode' => array(
                'scheme'   => 'http://specs.nic.cz/attr/addr/mail/pc',
                'text'     => 'Koresp. adresa – PSČ',
                'required' => false
            ),
            'phone' => array(
                'scheme'   => 'http://axschema.org/contact/phone/default',
                'text'     => 'Telefon – Hlavní',
                'required' => false
            ),
            'phone_home' => array(
                'scheme'   => 'http://axschema.org/contact/phone/home',
                'text'     => 'Telefon – Domácí',
                'required' => false
            ),
            'phone_work' => array(
                'scheme'   => 'http://axschema.org/contact/phone/business',
                'text'     => 'Telefon – Pracovní',
                'required' => false
            ),
            'phone_mobile' => array(
                'scheme'   => 'http://axschema.org/contact/phone/cell',
                'text'     => 'Telefon – Mobil',
                'required' => false
            ),
            'fax' => array(
                'scheme'   => 'http://axschema.org/contact/phone/fax',
                'text'     => 'Telefon – Fax',
                'required' => false
            ),
            'email' => array(
                'scheme'   => 'http://axschema.org/contact/email',
                'text'     => 'Email – Hlavní',
                'required' => false
            ),
            'email2' => array(
                'scheme'   => 'http://specs.nic.cz/attr/email/notify',
                'text'     => 'Email – Notifikační',
                'required' => false
            ),
            'email3' => array(
                'scheme'   => 'http://specs.nic.cz/attr/email/next',
                'text'     => 'Email – Další',
                'required' => false
            ),
            'url' => array(
                'scheme'   => 'http://axschema.org/contact/web/default',
                'text'     => 'URL – Hlavní',
                'required' => false
            ),
            'blog' => array(
                'scheme'   => 'http://axschema.org/contact/web/blog',
                'text'     => 'URL – Blog',
                'required' => false
            ),
            'url2' => array(
                'scheme'   => 'http://specs.nic.cz/attr/url/personal',
                'text'     => 'URL – Osobní',
                'required' => false
            ),
            'url3' => array(
                'scheme'   => 'http://specs.nic.cz/attr/url/work',
                'text'     => 'URL – Pracovní',
                'required' => false
            ),
            'rss' => array(
                'scheme'   => 'http://specs.nic.cz/attr/url/rss',
                'text'     => 'URL – RSS',
                'required' => false
            ),
            'fb' => array(
                'scheme'   => 'http://specs.nic.cz/attr/url/facebook',
                'text'     => 'URL – Facebook',
                'required' => false
            ),
            'twitter' => array(
                'scheme'   => 'http://specs.nic.cz/attr/url/twitter',
                'text'     => 'URL – Twitter',
                'required' => false
            ),
            'linkedin' => array(
                'scheme'   => 'http://specs.nic.cz/attr/url/linkedin',
                'text'     => 'URL – LinkedIN',
                'required' => false
            ),
            'icq' => array(
                'scheme'   => 'http://axschema.org/contact/IM/ICQ',
                'text'     => 'IM -ICQ',
                'required' => false
            ),
            'jabber' => array(
                'scheme'   => 'http://axschema.org/contact/IM/Jabber',
                'text'     => 'IM – Jabber',
                'required' => false
            ),
            'skype' => array(
                'scheme'   => 'http://axschema.org/contact/IM/Skype',
                'text'     => 'IM – Skype',
                'required' => false
            ),
            'gtalk' => array(
                'scheme'   => 'http://specs.nic.cz/attr/im/google_talk',
                'text'     => 'IM – Google Talk',
                'required' => false
            ),
            'wlive' => array(
                'scheme'   => 'http://specs.nic.cz/attr/im/windows_live',
                'text'     => 'IM – Windows Live',
                'required' => false
            ),
            'vat_id' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/ident/vat_id',
                'text'     => 'Identifikátor - ICO',
                'required' => false
            ),
            'vat' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/vat',
                'text'     => 'Identifikátor - DIC',
                'required' => false
            ),
            'op' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/ident/card',
                'text'     => 'Identifikátor – OP',
                'required' => false
            ),
            'pas' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/ident/pass',
                'text'     => 'Identifikátor - PAS',
                'required' => false
            ),
            'mpsv' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/ident/ssn',
                'text'     => 'Identifikátor - MPSV',
                'required' => false
            ),
            'student' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/student',
                'text'     => 'Příznak - Student',
                'required' => false
            ),
            'valid' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/valid',
                'text'     => 'Příznak – Validace',
                'required' => false
            ),
            'status' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/status',
                'text'     => 'Stav účtu',
                'required' => false
            ),
            'adult' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/adult',
                'text'     => 'Příznak – Starší 18 let',
                'required' => false
            ),
            'image' => array(
                'scheme'   => 'http://specs.nic.cz/attr/contact/image',
                'text'     => 'Obrázek (base64)',
                'required' => false
            )
        ];

        return $this->parameters;
    }

    /**
     * @param string $attribute
     * @param $value
     */
    public function setParameter(string $parameter, $value) : void
    {
        $this->parameters->$parameter = $value;
    }

    /**
     * @return array
     */
    public function getParameter() : array
    {
        return $this->parameters;
    }
}
