# Financeiro

## Principais usos da IA:

Geração do front com bootstrap
Sugestões de layout e organização visual
Ajuda na estruturação de Migration
Revisão de trechos de código para clareza e legibilidade

## Exemplo de uso da IA

### Sugestão de migration

Dê uma sugestão de migration de acordo com essas informações: Cadastro de lançamentos financeiros com descrição, valor, tipo
entrada/saída e status previsto/confirmado

Schema::create('financial_entries', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            
            // decimal é melhor que float pra dinheiro
            $table->decimal('amount', 10, 2);
            
            // enum para valores controlados
            $table->enum('type', ['entrada', 'saida']);
            $table->enum('status', ['previsto', 'confirmado'])
                  ->default('previsto');

            $table->timestamps();
        });

 
    public function up(): void
    {
        Schema::create('financial_transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->string('description');
        $table->decimal('amount', 10, 2);
        $table->enum('type', ['entrada', 'saida']);
        $table->enum('status', ['previsto', 'confirmado']);
        $table->timestamps();
});
    }
