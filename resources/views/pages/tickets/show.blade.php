<div class="card">
    <h5 class="card-header"><i class="fa fa-bus"></i> {{ $ticket->trajet }} - {{ $ticket->compagnie }} - {{ $ticket->date_depart }} a {{ $ticket->heure_depart }}</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>Client</th>
            <th>Telephone</th>
            <th>Nombre Ticket</th>
            <th>Prix Unitaire (F CFA)</th>
            <th>Total ( FCFA)</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if(!$get_tickets->isEmpty())
                @foreach ($get_tickets as $get_ticket )
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $get_ticket->nom }}</strong></td>
                    <td>{{ $get_ticket->telephone }}</td>
                    <td>{{ $get_ticket->nbr_ticket }}</td>
                    <td>{{number_format($get_ticket->pu, 0, ' ', ' ')  }}</td>
                    <td>{{ number_format($get_ticket->ttc, 0, ' ', ' ') }}</td>
                    @if($get_ticket->status == 'SUCCESS')
                        <td><span class="badge bg-success">SUCCES</td></span>
                    @endif
                    @if($get_ticket->status == 'FAILED')
                        <td><span class="badge bg-danger">ECHEC</td></span>
                    @endif
                    @if($get_ticket->status == 'EXPIRED')
                        <td><span class="badge bg-info">EXPIRE</td></span>
                    @endif
                    @if($get_ticket->status == 'INITIATED')
                        <td><span class="badge bg-warning">INITIÉ</td></span>
                    @endif
                    @if($get_ticket->status == 'PENDING')
                        <td><span class="badge bg-secondary">EN ATTENTE</td></span>
                    @endif
                </tr>
                @endforeach
            @else
            <tr class="table-danger">
                <td></td>
                <td></td>
                <td>
                        Pas de ticket
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
