@extends('layout')

@section('main')
    İletişim Sayfası İçeriği

    <h5>İletişim Formu</h5>

    @if($errors->any())
        Hatalı Veri Girişi! Lütfen Boş Alan Bırakmayınız.
        <ul>
           @foreach($errors->all() as $errors)
               <li>{{$errors}}</li>

           @endforeach
        </ul>
    @endif
    <form action="" method="POST">
        @csrf
            İsminiz:

    </br><input type="text" name="isim"/>
    </br>
    </br>
    Konu:
    <select name="Konu">
        <option>Öğrenci İşleri</option>
        <option>Sosyal Olanaklar</option>
        <option>Diğer</option>

    </select>

    </br>
    </br>
    Mesajınız:
    </br>
    <textarea name="mesaj"></textarea>
    </br>
    <input type="submit" value="Mesajı Gönder">
    </form>
@endsection

