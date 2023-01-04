<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => "Il campo :attribute deve essere accettato.",
    "accepted_if" => "Il campo :attribute deve essere accettato quando :other è uguale a :value.",
    "active_url" => "Il campo :attribute non è un URL valido.",
    "after" => "Il campo :attribute deve contenere una data successiva a :date.",
    "after_or_equal" => "Il campo :attribute deve contenere una data successiva o uguale a :date.",
    "alpha" => "Il campo :attribute deve contenere solo lettere.",
    "alpha_dash" => "Il campo :attribute deve contenere solo lettere, numeri, trattini e underscore.",
    "alpha_num" => "Il campo :attribute deve contenere solo lettere e numeri.",
    "array" => "Il campo :attribute deve essere un elenco.",
    "ascii" => "Il campo :attribute deve contenere solo caratteri alfanumerici single-byte e simboli.",
    "before" => "Il campo :attribute deve contenere una data antecedente a :date.",
    "before_or_equal" => "Il campo :attribute deve contenere una data antecedente o uguale a :date.",
    "between" => [
        "array" => "Il campo :attribute deve contenere un numero di oggetti compreso tra :min e :max.",
        "file" => "Il file :attribute deve avere una dimensione compresa tra :min e :max kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere compreso tra :min e :max.",
        "string" => "La stringa contenuta nel campo :attribute deve avere un numero di caratteri compreso tra :min e :max."
    ],
    "boolean" => "Il campo :attribute deve essere uguale a vero o a falso.",
    "confirmed" => "Nel campo :attribute non è stata effettuata la conferma.",
    "current_password" => "La password non è corretta.",
    "date" => "La data :attribute non è valida.",
    "date_equals" => "Il campo :attribute deve essere una data uguale a :date.",
    "date_format" => "Il campo :attribute deve contenere una data nel formato :format.",
    "decimal" => "Il campo :attribute deve contenere un numero con :decimal cifre decimali.",
    "declined" => "Il campo :attribute deve essere rifiutato.",
    "declined_if" => "Il campo :attribute deve essere rifiutato quando :other è uguale a :value.",
    "different" => "I campi :attribute e :other devono essere diversi.",
    "digits" => "Il campo :attribute deve avere :digits cifre.",
    "digits_between" => "Il campo :attribute deve contenere un numero di cifre comprese tra :min e :max.",
    "dimensions" => "Il campo :attribute contiene una immagine di dimensioni non valide.",
    "distinct" => "Il valore del campo :attribute è già presente.",
    "doesnt_end_with" => "Il valore del campo :attribute non potrebbe terminare con il seguente valore: :values.",
    "doesnt_start_with" => "Il valore del campo :attribute non potrebbe iniziare con il seguente valore: :values.",
    "email" => "Il campo :attribute deve contenere un indirizzo e-mail valido.",
    "ends_with" => "Il valore del campo :attribute deve terminare con il seguente valore: :values.",
    "enum" => "Il valore selezionato nel campo :attribute non è valido.",
    "exists" => "Il valore selezionato nel campo :attribute non è valido",
    "file" => "Il campo :attribute deve contenere un file.",
    "filled" => "Il campo :attribute deve avere un valore.",
    "gt" => [
        "array" => "Il campo :attribute deve contenere un numero di oggetti maggiore di :value.",
        "file" => "Il file :attribute deve avere una dimensione maggiore di :value kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere maggiore di :value.",
        "string" => "La stringa contenuta nel campo :attribute deve avere un numero di caratteri maggiore di :value."
    ],
    "gte" => [
        "array" => "Il campo :attribute deve contenere un numero di oggetti maggiore o uguale a :value.",
        "file" => "Il file :attribute deve avere una dimensione maggiore o uguale a :value kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere maggiore o uguale a :value.",
        "string" => "La stringa contenuta nel campo :attribute deve avere un numero di caratteri maggiore o uguale a :value."
    ],
    "image" => "Il campo :attribute deve contenere una immagine.",
    "in" => "Il valore del campo :attribute selezionato non è valido.",
    "in_array" => "Il valore del campo :attribute selezionato non esiste in :other.",
    "integer" => "Il valore del campo :attribute deve essere un numero intero.",
    "ip" => "Il campo :attribute deve contenere un indirizzo IP valido.",
    "ipv4" => "Il campo :attribute deve contenere un indirizzo IPv4 valido.",
    "ipv6" => "Il campo :attribute deve contenere un indirizzo IPv6 valido.",
    "json" => "Il campo :attribute deve contenere una stringa JSON valida.",
    "lowercase" => "Il campo :attribute deve avere tutte le lettere minuscole.",
    "lt" => [
        "array" => "Il campo :attribute deve contenere un numero di oggetti minore di :value.",
        "file" => "Il file :attribute deve avere una dimensione minore di :value kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere minore di :value.",
        "string" => "La stringa contenuta nel campo :attribute deve avere un numero di caratteri minore di :value."
    ],
    "lte" => [
        "array" => "Il campo :attribute deve contenere un numero di oggetti minore o uguale a :value.",
        "file" => "Il file :attribute deve avere una dimensione minore o uguale a :value kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere minore o uguale a :value.",
        "string" => "La stringa contenuta nel campo :attribute deve avere un numero di caratteri minore o uguale a :value."
    ],
    "mac_address" => "Il campo :attribute deve contenere un indirizzo MAC valido.",
    "max" => [
        "array" => "Il campo :attribute deve contenere al massimo un numero di oggetti pari a :max.",
        "file" => "Il file :attribute deve avere una dimensione massima di :max kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere al massimo uguale a :max.",
        "string" => "La stringa contenuta nel campo :attribute deve avere al massimo un numero di caratteri pari a :max."
    ],
    "max_digits" => "Il campo :attribute non deve contenere più di :max cifre.",
    "mimes" => "Il campo :attribute deve contenere un file di tipo: :values.",
    "mimetypes" => "Il campo :attribute deve contenere un file di tipo: :values.",
    "min" => [
        "array" => "Il campo :attribute deve contenere un numero di oggetti minimo pari a :min.",
        "file" => "Il file :attribute deve avere una dimensione minima di :min kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere minimo uguale a :min.",
        "string" => "La stringa contenuta nel campo :attribute deve avere un numero minimo di caratteri pari a :min."
    ],
    "min_digits" => "Il campo :attribute deve avere almeno :min cifre.",
    "multiple_of" => "Il valore del campo :attribute deve essere un multiplo di :value.",
    "not_in" => "Il valore del campo :attribute selezionato non è valido.",
    "not_regex" => "Il valore del campo :attribute selezionato non è in un formato valido.",
    "numeric" => "Il valore del campo :attribute deve essere un numero.",
    "password" => [
        "letters" => "Il campo :attribute deve contenere almeno una lettera.",
        "mixed" => "Il campo :attribute deve contenere almeno una lettera maiuscola ed una minuscola.",
        "numbers" => "Il campo :attribute deve contenere almeno un numero.",
        "symbols" => "Il campo :attribute deve contenere almeno un simbolo.",
        "uncompromised" => "Il valore fornito nel campo :attribute non è disponibile. Per favore scegli un valore diverso del campo :attribute."
    ],
    "present" => "Il campo :attribute deve essere presente.",
    "prohibited" => "Il valore del campo :attribute è proibito.",
    "prohibited_if" => "Il valore del campo :attribute è proibito quando :other è uguale a :value.",
    "prohibited_unless" => "Il valore del campo :attribute è proibito a meno che :other è contenuto in :values.",
    "prohibits" => "Il campo :attribute impedisce la presenza del valore :other.",
    "regex" => "Il formato del valore contenuto nel campo :attribute non è valido.",
    "required" => "Il campo :attribute è obbligatorio.",
    "required_array_keys" => "Il campo :attribute deve contenere tra le voci il seguente valore: :values.",
    "required_if" => "Il campo :attribute è obbligatorio quando :other è uguale a :value.",
    "required_if_accepted" => "Il campo :attribute è obbligatorio quando :other è stato accettato.",
    "required_unless" => "Il campo :attribute è obbligatorio a meno che :other è compreso in :values.",
    "required_with" => "Il campo :attribute è obbligatorio quando è presente il valore :values.",
    "required_with_all" => "Il campo :attribute è obbligatorio quando sono presenti i valori :values.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "Il campo :attribute è obbligatorio quando non è presente nessuno dei seguenti valori: :values.",
    "same" => "I valori dei campi :attribute e :other devono essere uguali.",
    "size" => [
        "array" => "Il campo :attribute deve contenere :size oggetti.",
        "file" => "Il file :attribute deve essere di dimensione pari a :size kilobytes.",
        "numeric" => "Il valore del campo :attribute deve essere uguale a :size.",
        "string" => "La stringa contenuta nel campo :attribute deve avere :size caratteri."
    ],
    "starts_with" => "Il valore del campo :attribute deve iniziare con il seguente valore: :values.",
    "string" => "Il valore del campo :attribute deve essere una stringa.",
    "timezone" => "Il campo :attribute deve contenere un timezone valido.",
    "unique" => "Il campo :attribute è stato già impostato.",
    "uploaded" => "L'upload del file :attribute è fallito.",
    "uppercase" => "Il campo :attribute deve avere tutte le lettere maiuscole.",
    "url" => "Il campo :attribute deve contenere un URL valido.",
    "ulid" => "Il campo :attribute deve contenere un ULID valido.",
    "uuid" => "Il campo :attribute deve contenere un UUID valido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => [
        "attribute-name" => [
            "rule-name" => "custom-message"
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    "attributes" => []

];
?>
