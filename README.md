# 14mar2024_LaravelTests

## Kas ir API?
Application Program Interface - pielieto, lai veicinātu komunikāciju starp front-end un back-end

## Kā deklarēt mainīgo PHP valodā?
Izmantojot formātu "$name = value"

## Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:

## Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
Object Relational Mapping pielieto, lai datubāzei varētu veikt pieprasījumus izmantojot servera valodu

## Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
User::where('rating', '>', 4);