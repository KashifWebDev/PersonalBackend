<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QuoteRows
 *
 * @property int $id
 * @property int $quote_id
 * @property string $description
 * @property int $qty
 * @property int $cost
 * @property int $tax
 * @property int $payment_made
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Quote $quote
 * @method static \Database\Factories\QuoteRowsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows wherePaymentMade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereQuoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteRows whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuoteRows extends Model
{
    use HasFactory;

    public function quote(){
        return $this->belongsTo(Quote::class);
    }
}
