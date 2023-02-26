@extends('base.base')
@section('title', 'HOME | BB')
@section('content')
    <section>
        <div class="img-product-emphasis" style="background-image: url({{ $emp[0] }});">
        </div>
        <div class="product-emphasis-buy" style="background-image: url({{ $emp[0] }});">
            <div class="info-product-emphasis">
                <p class="info-product-emphasis-text"><strong>{{ $emp[1] }}</strong></p>
            </div>
        </div>
        <p class="text-home-see-more"><strong>Confira mais produtos abaixo:</strong></p>
    </section>

    <section>
        <div class="form-filter-products">
            <form action="/" class="form-filter">
            <div class="selects">
                <div class="option">
                    <label for="frutas">Tipo</label>
                    <select id="type" name="frutas">
                    <option value="general">Geral</option>
                    <option value="computing">Infomática</option>
                    <option value="house">Casa</option>
                    <option value="helth">Saúde</option>
                    <option value="beaut">Beleza</option>
                    <option value="life">Estilo de vida</option>
                    <option value="art">Arte</option>
                    </select>
                    </div>
                    <div class="option">
                    <label for="price">Preço</label>
                    <select id="price" name="frutas">
                    <option value="general">Geral</option>
                    <option value="150">0 - 150</option>
                    <option value="500">150 - 500</option>
                    <option value="1000">500 - 1000</option>
                    <option value="10.000">1000 - 10.000</option>
                    <option value="20000">10.000 - 20.000</option>
                    <option value="plus">Acima de 20.000</option>
                    </select>
                    </div>
                    <div class="option">
                    <label for="local">Localização</label>
                    <select id="local" name="frutas">
                    <option value="general">Geral</option>
                    <option value="laranja">Perto</option>
                    <option value="limao">Cidades em volta</option>
                    <option value="uva">Mesmo estado</option>
                    <option value="maca">Mesma região</option>
                    <option value="maca">Brasil</option>
                    </select>
                    </div>
                    </form>
                    </div>
            </div>
        </div>
    </section>

    <section>
        <div class="back-products-list">
            @foreach ($products as $item)   
                <div class="product-card" style="background-image: url({{ $images[$item->id_announcement]->image }})">
                    <div class="info-content-card">
                        <p class="name-product-card"><Strong>{{ $item->name }}</Strong></p>
                        <p class="price-card"><strong>{{ $item->price }}</strong></p>
                        <p class="description-card">{{ substr($item->description , 0, 120) }} ...</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
