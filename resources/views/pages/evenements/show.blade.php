<div class="card">
    <h5 class="card-header"><i class="fa fa-id-card"></i> Lieu : {{ $evenement->lieu }} Date :  {{ $evenement->date }} Heure : {{ $evenement->heure }}</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>Client</th>
            <th>Telephone</th>
            <th>Nombre evenement</th>
            <th>Prix Unitaire (F CFA)</th>
            <th>Total ( FCFA)</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if(!$get_evenements->isEmpty())
                @foreach ($get_evenements as $get_evenement )
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $get_evenement->nom }}</strong></td>
                    <td>{{ $get_evenement->telephone }}</td>
                    <td>{{ $get_evenement->nbr_ticket }}</td>
                    <td>{{number_format($get_evenement->pu, 0, ' ', ' ')  }}</td>
                    <td>{{ number_format($get_evenement->ttc, 0, ' ', ' ') }}</td>
                    @if($get_evenement->status == 'SUCCESS')
                        <td><span class="badge bg-success">SUCCES</td></span>
                    @endif
                    @if($get_evenement->status == 'FAILED')
                        <td><span class="badge bg-danger">ECHEC</td></span>
                    @endif
                    @if($get_evenement->status == 'EXPIRED')
                        <td><span class="badge bg-info">EXPIRE</td></span>
                    @endif
                    @if($get_evenement->status == 'INITIATED')
                        <td><span class="badge bg-warning">INITIÉ</td></span>
                    @endif
                    @if($get_evenement->status == 'PENDING')
                        <td><span class="badge bg-secondary">EN ATTENTE</td></span>
                    @endif
                </tr>
                @endforeach
            @else
            <tr class="table-danger">
                <td></td>
                <td></td>
                <td>
                        Pas d'evenement
                </td>
                <td></td>
                <td></td>
              </tr>
            @endif
            <tr><td></td></tr>

        </tbody>
      </table>
    </div>
  </div>
